<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkcard\V20210520\Models;

use AlibabaCloud\Tea\Model;

class ResumeSingleCardShrinkRequest extends Model
{
    /**
     * @example 89860321******15668
     *
     * @var string
     */
    public $iccid;

    /**
     * @example ["111******6826","11*******6827"]
     *
     * @var string
     */
    public $optMsisdnsShrink;
    protected $_name = [
        'iccid'            => 'Iccid',
        'optMsisdnsShrink' => 'OptMsisdns',
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
        if (null !== $this->optMsisdnsShrink) {
            $res['OptMsisdns'] = $this->optMsisdnsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResumeSingleCardShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Iccid'])) {
            $model->iccid = $map['Iccid'];
        }
        if (isset($map['OptMsisdns'])) {
            $model->optMsisdnsShrink = $map['OptMsisdns'];
        }

        return $model;
    }
}
