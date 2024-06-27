<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Tea\Model;

class DescribeExistSceneRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $sceneName;

    /**
     * @var string
     */
    public $regId;
    protected $_name = [
        'lang'      => 'Lang',
        'sceneName' => 'SceneName',
        'regId'     => 'regId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->sceneName) {
            $res['SceneName'] = $this->sceneName;
        }
        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeExistSceneRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['SceneName'])) {
            $model->sceneName = $map['SceneName'];
        }
        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }

        return $model;
    }
}
