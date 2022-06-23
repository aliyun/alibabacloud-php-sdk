<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class AssetsListAssetsRequest extends Model
{
    /**
     * @description AppId
     *
     * @var string
     */
    public $appId;

    /**
     * @description Optional. Used to specify a subset of fields that should be
     * returned by a get operation or modified by an update operation.
     * @var string
     */
    public $fieldMask;

    /**
     * @description 每页显示个数，最大支持20，参数为空默认显示个数为10。
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description 分页Token Optional.
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description 参数
     *
     * @var string
     */
    public $params;

    /**
     * @description 订阅Topic
     *
     * @var string
     */
    public $topic;
    protected $_name = [
        'appId'      => 'AppId',
        'fieldMask'  => 'FieldMask',
        'maxResults' => 'MaxResults',
        'nextToken'  => 'NextToken',
        'params'     => 'Params',
        'topic'      => 'Topic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->fieldMask) {
            $res['FieldMask'] = $this->fieldMask;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssetsListAssetsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['FieldMask'])) {
            $model->fieldMask = $map['FieldMask'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
