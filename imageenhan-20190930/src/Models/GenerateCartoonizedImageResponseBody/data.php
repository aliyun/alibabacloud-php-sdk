<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models\GenerateCartoonizedImageResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example http://vibktprfx-prod-prod-damo-eas-cn-shanghai.oss-cn-shanghai.aliyuncs.com/generative-cartoon/2023-02-02/5a3e5760-ff27-4321-8976-d05656fb716a/20230202_154009511910_pclb0gomva.jpg?Expires=1675325422&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=UmAa7HxeumVkDfrdoL02dtztwS****
     *
     * @var string
     */
    public $resultUrl;
    protected $_name = [
        'resultUrl' => 'ResultUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resultUrl) {
            $res['ResultUrl'] = $this->resultUrl;
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
        if (isset($map['ResultUrl'])) {
            $model->resultUrl = $map['ResultUrl'];
        }

        return $model;
    }
}
