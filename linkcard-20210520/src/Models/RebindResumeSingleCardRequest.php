<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkcard\V20210520\Models;

use AlibabaCloud\Tea\Model;

class RebindResumeSingleCardRequest extends Model
{
    /**
     * @var string
     */
    public $iccid;

    /**
     * @var mixed[]
     */
    public $optMsisdns;
    protected $_name = [
        'iccid'      => 'Iccid',
        'optMsisdns' => 'OptMsisdns',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iccid) {
            $res['Iccid'] = $this->iccid;
        }
        if (null !== $this->optMsisdns) {
            $res['OptMsisdns'] = $this->optMsisdns;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RebindResumeSingleCardRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Iccid'])) {
            $model->iccid = $map['Iccid'];
        }
        if (isset($map['OptMsisdns'])) {
            $model->optMsisdns = $map['OptMsisdns'];
        }

        return $model;
    }
}
