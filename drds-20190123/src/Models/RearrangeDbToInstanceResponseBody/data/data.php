<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\RearrangeDbToInstanceResponseBody\data;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $dstInstance;

    /**
     * @var string
     */
    public $srcDbName;

    /**
     * @var string
     */
    public $srcInstance;
    protected $_name = [
        'dstInstance' => 'DstInstance',
        'srcDbName'   => 'SrcDbName',
        'srcInstance' => 'SrcInstance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dstInstance) {
            $res['DstInstance'] = $this->dstInstance;
        }
        if (null !== $this->srcDbName) {
            $res['SrcDbName'] = $this->srcDbName;
        }
        if (null !== $this->srcInstance) {
            $res['SrcInstance'] = $this->srcInstance;
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
        if (isset($map['DstInstance'])) {
            $model->dstInstance = $map['DstInstance'];
        }
        if (isset($map['SrcDbName'])) {
            $model->srcDbName = $map['SrcDbName'];
        }
        if (isset($map['SrcInstance'])) {
            $model->srcInstance = $map['SrcInstance'];
        }

        return $model;
    }
}
