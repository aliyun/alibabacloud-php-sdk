<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\GetServiceRecordResponseBody;

use AlibabaCloud\Dara\Model;

class record extends Model
{
    /**
     * @var string
     */
    public $recordContent;

    /**
     * @var string
     */
    public $recordType;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'recordContent' => 'recordContent',
        'recordType' => 'recordType',
        'serviceId' => 'serviceId',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->recordContent) {
            $res['recordContent'] = $this->recordContent;
        }

        if (null !== $this->recordType) {
            $res['recordType'] = $this->recordType;
        }

        if (null !== $this->serviceId) {
            $res['serviceId'] = $this->serviceId;
        }

        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
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
        if (isset($map['recordContent'])) {
            $model->recordContent = $map['recordContent'];
        }

        if (isset($map['recordType'])) {
            $model->recordType = $map['recordType'];
        }

        if (isset($map['serviceId'])) {
            $model->serviceId = $map['serviceId'];
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
