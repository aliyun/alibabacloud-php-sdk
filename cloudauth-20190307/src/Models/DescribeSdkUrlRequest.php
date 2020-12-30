<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class DescribeSdkUrlRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $debug;
    protected $_name = [
        'sourceIp' => 'SourceIp',
        'id'       => 'Id',
        'debug'    => 'Debug',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->debug) {
            $res['Debug'] = $this->debug;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSdkUrlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Debug'])) {
            $model->debug = $map['Debug'];
        }

        return $model;
    }
}
