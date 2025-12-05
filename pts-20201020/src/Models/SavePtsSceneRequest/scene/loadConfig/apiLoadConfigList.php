<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\SavePtsSceneRequest\scene\loadConfig;

use AlibabaCloud\Dara\Model;

class apiLoadConfigList extends Model
{
    /**
     * @var string
     */
    public $apiId;

    /**
     * @var int
     */
    public $rpsBegin;

    /**
     * @var int
     */
    public $rpsLimit;
    protected $_name = [
        'apiId' => 'ApiId',
        'rpsBegin' => 'RpsBegin',
        'rpsLimit' => 'RpsLimit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }

        if (null !== $this->rpsBegin) {
            $res['RpsBegin'] = $this->rpsBegin;
        }

        if (null !== $this->rpsLimit) {
            $res['RpsLimit'] = $this->rpsLimit;
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
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }

        if (isset($map['RpsBegin'])) {
            $model->rpsBegin = $map['RpsBegin'];
        }

        if (isset($map['RpsLimit'])) {
            $model->rpsLimit = $map['RpsLimit'];
        }

        return $model;
    }
}
