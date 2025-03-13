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

use AlibabaCloud\Tea\Model;

class GetDialogAnalysisResultRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $asc;

    /**
     * @example 2024-09-23 09:20:02
     *
     * @var string
     */
    public $endTime;

    /**
     * @var string[]
     */
    public $sessionIds;

    /**
     * @example 2024-09-14 09:11:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @example true
     *
     * @var bool
     */
    public $useUrl;
    protected $_name = [
        'asc' => 'asc',
        'endTime' => 'endTime',
        'sessionIds' => 'sessionIds',
        'startTime' => 'startTime',
        'useUrl' => 'useUrl',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->asc) {
            $res['asc'] = $this->asc;
        }
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->sessionIds) {
            $res['sessionIds'] = $this->sessionIds;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        if (null !== $this->useUrl) {
            $res['useUrl'] = $this->useUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDialogAnalysisResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['asc'])) {
            $model->asc = $map['asc'];
        }
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['sessionIds'])) {
            if (!empty($map['sessionIds'])) {
                $model->sessionIds = $map['sessionIds'];
            }
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }
        if (isset($map['useUrl'])) {
            $model->useUrl = $map['useUrl'];
        }

        return $model;
    }
}
