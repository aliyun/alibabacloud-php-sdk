<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models\QueryFaceVideoTemplateResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\QueryFaceVideoTemplateResponseBody\data\elements\faceInfos;

class elements extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var faceInfos[]
     */
    public $faceInfos;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateURL;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'createTime' => 'CreateTime',
        'faceInfos' => 'FaceInfos',
        'templateId' => 'TemplateId',
        'templateURL' => 'TemplateURL',
        'updateTime' => 'UpdateTime',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        if (\is_array($this->faceInfos)) {
            Model::validateArray($this->faceInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->faceInfos) {
            if (\is_array($this->faceInfos)) {
                $res['FaceInfos'] = [];
                $n1 = 0;
                foreach ($this->faceInfos as $item1) {
                    $res['FaceInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->templateURL) {
            $res['TemplateURL'] = $this->templateURL;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['FaceInfos'])) {
            if (!empty($map['FaceInfos'])) {
                $model->faceInfos = [];
                $n1 = 0;
                foreach ($map['FaceInfos'] as $item1) {
                    $model->faceInfos[$n1] = faceInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['TemplateURL'])) {
            $model->templateURL = $map['TemplateURL'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
