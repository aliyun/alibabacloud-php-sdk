<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppDomainRedirectRecordsResponseBody\module;

use AlibabaCloud\Dara\Model;

class next extends Model
{
    /**
     * @var string
     */
    public $recordId;

    /**
     * @var string
     */
    public $sourceDomain;

    /**
     * @var string
     */
    public $targetDomain;
    protected $_name = [
        'recordId' => 'RecordId',
        'sourceDomain' => 'SourceDomain',
        'targetDomain' => 'TargetDomain',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }

        if (null !== $this->sourceDomain) {
            $res['SourceDomain'] = $this->sourceDomain;
        }

        if (null !== $this->targetDomain) {
            $res['TargetDomain'] = $this->targetDomain;
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
        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }

        if (isset($map['SourceDomain'])) {
            $model->sourceDomain = $map['SourceDomain'];
        }

        if (isset($map['TargetDomain'])) {
            $model->targetDomain = $map['TargetDomain'];
        }

        return $model;
    }
}
