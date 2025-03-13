<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\SDK\DianJin\V20240628\Models\UpdateQaLibraryRequest\parseQaResults;
use AlibabaCloud\Tea\Model;

class UpdateQaLibraryRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var parseQaResults[]
     */
    public $parseQaResults;

    /**
     * @example 6jh378d
     *
     * @var string
     */
    public $qaLibraryId;

    /**
     * @description This parameter is required.
     *
     * @example 0FC6636E-380A-5369-AE01-D1C15BB9B254
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'parseQaResults' => 'parseQaResults',
        'qaLibraryId' => 'qaLibraryId',
        'requestId' => 'requestId',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->parseQaResults) {
            $res['parseQaResults'] = [];
            if (null !== $this->parseQaResults && \is_array($this->parseQaResults)) {
                $n = 0;
                foreach ($this->parseQaResults as $item) {
                    $res['parseQaResults'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->qaLibraryId) {
            $res['qaLibraryId'] = $this->qaLibraryId;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateQaLibraryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['parseQaResults'])) {
            if (!empty($map['parseQaResults'])) {
                $model->parseQaResults = [];
                $n = 0;
                foreach ($map['parseQaResults'] as $item) {
                    $model->parseQaResults[$n++] = null !== $item ? parseQaResults::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['qaLibraryId'])) {
            $model->qaLibraryId = $map['qaLibraryId'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
