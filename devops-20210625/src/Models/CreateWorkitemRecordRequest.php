<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class CreateWorkitemRecordRequest extends Model
{
    /**
     * @var string
     */
    public $actualTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $gmtEnd;

    /**
     * @var string
     */
    public $gmtStart;

    /**
     * @var string
     */
    public $recordUserIdentifier;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $workitemIdentifier;
    protected $_name = [
        'actualTime'           => 'actualTime',
        'description'          => 'description',
        'gmtEnd'               => 'gmtEnd',
        'gmtStart'             => 'gmtStart',
        'recordUserIdentifier' => 'recordUserIdentifier',
        'type'                 => 'type',
        'workitemIdentifier'   => 'workitemIdentifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actualTime) {
            $res['actualTime'] = $this->actualTime;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->gmtEnd) {
            $res['gmtEnd'] = $this->gmtEnd;
        }
        if (null !== $this->gmtStart) {
            $res['gmtStart'] = $this->gmtStart;
        }
        if (null !== $this->recordUserIdentifier) {
            $res['recordUserIdentifier'] = $this->recordUserIdentifier;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->workitemIdentifier) {
            $res['workitemIdentifier'] = $this->workitemIdentifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateWorkitemRecordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['actualTime'])) {
            $model->actualTime = $map['actualTime'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['gmtEnd'])) {
            $model->gmtEnd = $map['gmtEnd'];
        }
        if (isset($map['gmtStart'])) {
            $model->gmtStart = $map['gmtStart'];
        }
        if (isset($map['recordUserIdentifier'])) {
            $model->recordUserIdentifier = $map['recordUserIdentifier'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['workitemIdentifier'])) {
            $model->workitemIdentifier = $map['workitemIdentifier'];
        }

        return $model;
    }
}
