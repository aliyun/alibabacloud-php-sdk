<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models;

use AlibabaCloud\Tea\Model;

class GetPreSignedUrlRequest extends Model
{
    /**
     * @example {"version":"1.0.0"}
     *
     * @var string
     */
    public $clientBaseParam;

    /**
     * @example 1.0.001
     *
     * @var string
     */
    public $clientVersion;

    /**
     * @example test.mp4
     *
     * @var string
     */
    public $prefix;
    protected $_name = [
        'clientBaseParam' => 'ClientBaseParam',
        'clientVersion'   => 'ClientVersion',
        'prefix'          => 'Prefix',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientBaseParam) {
            $res['ClientBaseParam'] = $this->clientBaseParam;
        }
        if (null !== $this->clientVersion) {
            $res['ClientVersion'] = $this->clientVersion;
        }
        if (null !== $this->prefix) {
            $res['Prefix'] = $this->prefix;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPreSignedUrlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientBaseParam'])) {
            $model->clientBaseParam = $map['ClientBaseParam'];
        }
        if (isset($map['ClientVersion'])) {
            $model->clientVersion = $map['ClientVersion'];
        }
        if (isset($map['Prefix'])) {
            $model->prefix = $map['Prefix'];
        }

        return $model;
    }
}
