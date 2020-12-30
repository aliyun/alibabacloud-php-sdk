<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\DescribeMnsOauthResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $topicList;

    /**
     * @var string
     */
    public $topicName;

    /**
     * @var bool
     */
    public $mnsAuthorized;

    /**
     * @var string
     */
    public $endPoint;

    /**
     * @var bool
     */
    public $mnsServe;

    /**
     * @var bool
     */
    public $openMnsService;
    protected $_name = [
        'topicList'      => 'TopicList',
        'topicName'      => 'TopicName',
        'mnsAuthorized'  => 'MnsAuthorized',
        'endPoint'       => 'EndPoint',
        'mnsServe'       => 'MnsServe',
        'openMnsService' => 'OpenMnsService',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->topicList) {
            $res['TopicList'] = $this->topicList;
        }
        if (null !== $this->topicName) {
            $res['TopicName'] = $this->topicName;
        }
        if (null !== $this->mnsAuthorized) {
            $res['MnsAuthorized'] = $this->mnsAuthorized;
        }
        if (null !== $this->endPoint) {
            $res['EndPoint'] = $this->endPoint;
        }
        if (null !== $this->mnsServe) {
            $res['MnsServe'] = $this->mnsServe;
        }
        if (null !== $this->openMnsService) {
            $res['OpenMnsService'] = $this->openMnsService;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TopicList'])) {
            if (!empty($map['TopicList'])) {
                $model->topicList = $map['TopicList'];
            }
        }
        if (isset($map['TopicName'])) {
            $model->topicName = $map['TopicName'];
        }
        if (isset($map['MnsAuthorized'])) {
            $model->mnsAuthorized = $map['MnsAuthorized'];
        }
        if (isset($map['EndPoint'])) {
            $model->endPoint = $map['EndPoint'];
        }
        if (isset($map['MnsServe'])) {
            $model->mnsServe = $map['MnsServe'];
        }
        if (isset($map['OpenMnsService'])) {
            $model->openMnsService = $map['OpenMnsService'];
        }

        return $model;
    }
}
