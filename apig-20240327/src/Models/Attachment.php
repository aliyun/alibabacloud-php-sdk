<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class Attachment extends Model
{
    /**
     * @var string
     */
    public $attachResourceId;

    /**
     * @var string[]
     */
    public $attachResourceIds;

    /**
     * @var string[]
     */
    public $attachResourceParentIds;

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
        'attachResourceId' => 'attachResourceId',
        'attachResourceIds' => 'attachResourceIds',
        'attachResourceParentIds' => 'attachResourceParentIds',
        'attachResourceType' => 'attachResourceType',
        'environmentId' => 'environmentId',
        'gatewayId' => 'gatewayId',
        'policyAttachmentId' => 'policyAttachmentId',
    ];

    public function validate()
    {
        if (\is_array($this->attachResourceIds)) {
            Model::validateArray($this->attachResourceIds);
        }
        if (\is_array($this->attachResourceParentIds)) {
            Model::validateArray($this->attachResourceParentIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachResourceId) {
            $res['attachResourceId'] = $this->attachResourceId;
        }

        if (null !== $this->attachResourceIds) {
            if (\is_array($this->attachResourceIds)) {
                $res['attachResourceIds'] = [];
                $n1 = 0;
                foreach ($this->attachResourceIds as $item1) {
                    $res['attachResourceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->attachResourceParentIds) {
            if (\is_array($this->attachResourceParentIds)) {
                $res['attachResourceParentIds'] = [];
                $n1 = 0;
                foreach ($this->attachResourceParentIds as $item1) {
                    $res['attachResourceParentIds'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['attachResourceId'])) {
            $model->attachResourceId = $map['attachResourceId'];
        }

        if (isset($map['attachResourceIds'])) {
            if (!empty($map['attachResourceIds'])) {
                $model->attachResourceIds = [];
                $n1 = 0;
                foreach ($map['attachResourceIds'] as $item1) {
                    $model->attachResourceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['attachResourceParentIds'])) {
            if (!empty($map['attachResourceParentIds'])) {
                $model->attachResourceParentIds = [];
                $n1 = 0;
                foreach ($map['attachResourceParentIds'] as $item1) {
                    $model->attachResourceParentIds[$n1] = $item1;
                    ++$n1;
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
