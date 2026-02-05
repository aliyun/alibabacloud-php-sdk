<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CustomerService\V20231228\Models\ListEnterpriseSupportPlanResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\ListEnterpriseSupportPlanResponseBody\data\docs\attachments;

class docs extends Model
{
    /**
     * @var attachments[]
     */
    public $attachments;

    /**
     * @var int
     */
    public $docId;

    /**
     * @var bool
     */
    public $evaluated;

    /**
     * @var string
     */
    public $evaluationUrl;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $freeOrderApplyCode;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $uploadTime;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'attachments' => 'attachments',
        'docId' => 'docId',
        'evaluated' => 'evaluated',
        'evaluationUrl' => 'evaluationUrl',
        'fileName' => 'fileName',
        'freeOrderApplyCode' => 'freeOrderApplyCode',
        'name' => 'name',
        'orderId' => 'orderId',
        'uploadTime' => 'uploadTime',
        'url' => 'url',
    ];

    public function validate()
    {
        if (\is_array($this->attachments)) {
            Model::validateArray($this->attachments);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachments) {
            if (\is_array($this->attachments)) {
                $res['attachments'] = [];
                $n1 = 0;
                foreach ($this->attachments as $item1) {
                    $res['attachments'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->docId) {
            $res['docId'] = $this->docId;
        }

        if (null !== $this->evaluated) {
            $res['evaluated'] = $this->evaluated;
        }

        if (null !== $this->evaluationUrl) {
            $res['evaluationUrl'] = $this->evaluationUrl;
        }

        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }

        if (null !== $this->freeOrderApplyCode) {
            $res['freeOrderApplyCode'] = $this->freeOrderApplyCode;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->orderId) {
            $res['orderId'] = $this->orderId;
        }

        if (null !== $this->uploadTime) {
            $res['uploadTime'] = $this->uploadTime;
        }

        if (null !== $this->url) {
            $res['url'] = $this->url;
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
        if (isset($map['attachments'])) {
            if (!empty($map['attachments'])) {
                $model->attachments = [];
                $n1 = 0;
                foreach ($map['attachments'] as $item1) {
                    $model->attachments[$n1] = attachments::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['docId'])) {
            $model->docId = $map['docId'];
        }

        if (isset($map['evaluated'])) {
            $model->evaluated = $map['evaluated'];
        }

        if (isset($map['evaluationUrl'])) {
            $model->evaluationUrl = $map['evaluationUrl'];
        }

        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }

        if (isset($map['freeOrderApplyCode'])) {
            $model->freeOrderApplyCode = $map['freeOrderApplyCode'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['orderId'])) {
            $model->orderId = $map['orderId'];
        }

        if (isset($map['uploadTime'])) {
            $model->uploadTime = $map['uploadTime'];
        }

        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
