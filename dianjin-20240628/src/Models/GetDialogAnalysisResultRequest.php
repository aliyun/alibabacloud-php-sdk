<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\Dara\Model;

class GetDialogAnalysisResultRequest extends Model
{
    /**
     * @var bool
     */
    public $asc;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string[]
     */
    public $sessionIds;

    /**
     * @var string
     */
    public $startTime;

    /**
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

    public function validate()
    {
        if (\is_array($this->sessionIds)) {
            Model::validateArray($this->sessionIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asc) {
            $res['asc'] = $this->asc;
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->sessionIds) {
            if (\is_array($this->sessionIds)) {
                $res['sessionIds'] = [];
                $n1 = 0;
                foreach ($this->sessionIds as $item1) {
                    $res['sessionIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->useUrl) {
            $res['useUrl'] = $this->useUrl;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->sessionIds = [];
                $n1 = 0;
                foreach ($map['sessionIds'] as $item1) {
                    $model->sessionIds[$n1++] = $item1;
                }
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
