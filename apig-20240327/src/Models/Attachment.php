<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class Attachment extends Model
{
    /**
     * @var string[]
     */
    public $attachResourceIds;
    /**
     * @var string
     */
    public $attachResourceType;
    /**
     * @var string
     */
    public $environmentId;
    /**
     * @var string
     */
    public $gatewayId;
    /**
     * @var string
     */
    public $policyAttachmentId;
    protected $_name = [
        'attachResourceIds'  => 'attachResourceIds',
        'attachResourceType' => 'attachResourceType',
        'environmentId'      => 'environmentId',
        'gatewayId'          => 'gatewayId',
        'policyAttachmentId' => 'policyAttachmentId',
    ];

    public function validate()
    {
        if (\is_array($this->attachResourceIds)) {
            Model::validateArray($this->attachResourceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachResourceIds) {
            if (\is_array($this->attachResourceIds)) {
                $res['attachResourceIds'] = [];
                $n1                       = 0;
                foreach ($this->attachResourceIds as $item1) {
                    $res['attachResourceIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->attachResourceType) {
            $res['attachResourceType'] = $this->attachResourceType;
        }

        if (null !== $this->environmentId) {
            $res['environmentId'] = $this->environmentId;
        }

        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }

        if (null !== $this->policyAttachmentId) {
            $res['policyAttachmentId'] = $this->policyAttachmentId;
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
        if (isset($map['attachResourceIds'])) {
            if (!empty($map['attachResourceIds'])) {
                $model->attachResourceIds = [];
                $n1                       = 0;
                foreach ($map['attachResourceIds'] as $item1) {
                    $model->attachResourceIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['attachResourceType'])) {
            $model->attachResourceType = $map['attachResourceType'];
        }

        if (isset($map['environmentId'])) {
            $model->environmentId = $map['environmentId'];
        }

        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }

        if (isset($map['policyAttachmentId'])) {
            $model->policyAttachmentId = $map['policyAttachmentId'];
        }

        return $model;
    }
}
