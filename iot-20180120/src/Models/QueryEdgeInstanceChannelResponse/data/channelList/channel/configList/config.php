<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeInstanceChannelResponse\data\channelList\channel\configList;

use AlibabaCloud\Tea\Model;

class config extends Model
{
    /**
     * @var string
     */
    public $configId;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $format;

    /**
     * @var string
     */
    public $key;
    protected $_name = [
        'configId' => 'ConfigId',
        'content'  => 'Content',
        'format'   => 'Format',
        'key'      => 'Key',
    ];

    public function validate()
    {
        Model::validateRequired('configId', $this->configId, true);
        Model::validateRequired('content', $this->content, true);
        Model::validateRequired('format', $this->format, true);
        Model::validateRequired('key', $this->key, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return config
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        return $model;
    }
}
