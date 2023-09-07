<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models\GetAdvertisingForE2ResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $imgUrl;

    /**
     * @example https://********
     *
     * @var string
     */
    public $targetUrl;
    protected $_name = [
        'imgUrl'    => 'ImgUrl',
        'targetUrl' => 'TargetUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imgUrl) {
            $res['ImgUrl'] = $this->imgUrl;
        }
        if (null !== $this->targetUrl) {
            $res['TargetUrl'] = $this->targetUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImgUrl'])) {
            $model->imgUrl = $map['ImgUrl'];
        }
        if (isset($map['TargetUrl'])) {
            $model->targetUrl = $map['TargetUrl'];
        }

        return $model;
    }
}
