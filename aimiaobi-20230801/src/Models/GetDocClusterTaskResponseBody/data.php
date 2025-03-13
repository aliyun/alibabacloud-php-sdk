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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetDocClusterTaskResponseBody;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetDocClusterTaskResponseBody\data\topics;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 错误信息
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example PENDING
     *
     * @var string
     */
    public $status;

    /**
     * @var topics[]
     */
    public $topics;
    protected $_name = [
        'errorMessage' => 'ErrorMessage',
        'status' => 'Status',
        'topics' => 'Topics',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->topics) {
            $res['Topics'] = [];
            if (null !== $this->topics && \is_array($this->topics)) {
                $n = 0;
                foreach ($this->topics as $item) {
                    $res['Topics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Topics'])) {
            if (!empty($map['Topics'])) {
                $model->topics = [];
                $n = 0;
                foreach ($map['Topics'] as $item) {
                    $model->topics[$n++] = null !== $item ? topics::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
