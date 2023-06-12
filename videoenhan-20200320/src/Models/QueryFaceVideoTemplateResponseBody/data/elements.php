<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models\QueryFaceVideoTemplateResponseBody\data;

use AlibabaCloud\SDK\Videoenhan\V20200320\Models\QueryFaceVideoTemplateResponseBody\data\elements\faceInfos;
use AlibabaCloud\Tea\Model;

class elements extends Model
{
    /**
     * @example 2021-09-06 15:17:19
     *
     * @var string
     */
    public $createTime;

    /**
     * @var faceInfos[]
     */
    public $faceInfos;

    /**
     * @example 3bf2418c-7adf-4002-a9d6-2f7cf1889c0d
     *
     * @var string
     */
    public $templateId;

    /**
     * @example http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/image-face-fusion/OriginUrl/user/2021-09-06/e4d6ecf6-8dc8-4dac-acb5-56a737ccbc06?Expires=1630914551&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=kBcLm66y7%2FZ3eIMgwXJg1zNP7k****
     *
     * @var string
     */
    public $templateURL;

    /**
     * @example 2021-09-06 15:18:15
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example zhangsan
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'createTime'  => 'CreateTime',
        'faceInfos'   => 'FaceInfos',
        'templateId'  => 'TemplateId',
        'templateURL' => 'TemplateURL',
        'updateTime'  => 'UpdateTime',
        'userId'      => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->faceInfos) {
            $res['FaceInfos'] = [];
            if (null !== $this->faceInfos && \is_array($this->faceInfos)) {
                $n = 0;
                foreach ($this->faceInfos as $item) {
                    $res['FaceInfos'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return elements
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['FaceInfos'])) {
            if (!empty($map['FaceInfos'])) {
                $model->faceInfos = [];
                $n                = 0;
                foreach ($map['FaceInfos'] as $item) {
                    $model->faceInfos[$n++] = null !== $item ? faceInfos::fromMap($item) : $item;
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
