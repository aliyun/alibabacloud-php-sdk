<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Dara\Model;

class GetListRecordRequest extends Model
{
    /**
     * @var string
     */
    public $analysisId;

    /**
     * @var int
     */
    public $current;

    /**
     * @var int
     */
    public $customId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $region;
    protected $_name = [
        'analysisId' => 'analysisId',
        'current' => 'current',
        'customId' => 'customId',
        'pageSize' => 'pageSize',
        'region' => 'region',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->analysisId) {
            $res['analysisId'] = $this->analysisId;
        }

        if (null !== $this->current) {
            $res['current'] = $this->current;
        }

        if (null !== $this->customId) {
            $res['customId'] = $this->customId;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->region) {
            $res['region'] = $this->region;
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
        if (isset($map['analysisId'])) {
            $model->analysisId = $map['analysisId'];
        }

        if (isset($map['current'])) {
            $model->current = $map['current'];
        }

        if (isset($map['customId'])) {
            $model->customId = $map['customId'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        return $model;
    }
}
