<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\SDK\APIG\V20240327\Models\HttpDubboTranscoder\mothedMapList;
use AlibabaCloud\Tea\Model;

class HttpDubboTranscoder extends Model
{
    /**
     * @var string
     */
    public $dubboServiceGroup;

    /**
     * @var string
     */
    public $dubboServiceName;

    /**
     * @var string
     */
    public $dubboServiceVersion;

    /**
     * @var mothedMapList[]
     */
    public $mothedMapList;
    protected $_name = [
        'dubboServiceGroup' => 'dubboServiceGroup',
        'dubboServiceName' => 'dubboServiceName',
        'dubboServiceVersion' => 'dubboServiceVersion',
        'mothedMapList' => 'mothedMapList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dubboServiceGroup) {
            $res['dubboServiceGroup'] = $this->dubboServiceGroup;
        }
        if (null !== $this->dubboServiceName) {
            $res['dubboServiceName'] = $this->dubboServiceName;
        }
        if (null !== $this->dubboServiceVersion) {
            $res['dubboServiceVersion'] = $this->dubboServiceVersion;
        }
        if (null !== $this->mothedMapList) {
            $res['mothedMapList'] = [];
            if (null !== $this->mothedMapList && \is_array($this->mothedMapList)) {
                $n = 0;
                foreach ($this->mothedMapList as $item) {
                    $res['mothedMapList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HttpDubboTranscoder
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dubboServiceGroup'])) {
            $model->dubboServiceGroup = $map['dubboServiceGroup'];
        }
        if (isset($map['dubboServiceName'])) {
            $model->dubboServiceName = $map['dubboServiceName'];
        }
        if (isset($map['dubboServiceVersion'])) {
            $model->dubboServiceVersion = $map['dubboServiceVersion'];
        }
        if (isset($map['mothedMapList'])) {
            if (!empty($map['mothedMapList'])) {
                $model->mothedMapList = [];
                $n = 0;
                foreach ($map['mothedMapList'] as $item) {
                    $model->mothedMapList[$n++] = null !== $item ? mothedMapList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
