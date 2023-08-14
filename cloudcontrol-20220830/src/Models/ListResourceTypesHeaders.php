<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudcontrol\V20220830\Models;

use AlibabaCloud\Tea\Model;

class ListResourceTypesHeaders extends Model
{
    public $commonHeaders;

    /**
     * @example zh_CH
     *
     * @var string
     */
    public $xAcsAcceptLanguage;
    protected $_name = [
        'xAcsAcceptLanguage' => 'x-acs-accept-language',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commonHeaders) {
            $res['commonHeaders'] = $this->commonHeaders;
        }
        if (null !== $this->xAcsAcceptLanguage) {
            $res['x-acs-accept-language'] = $this->xAcsAcceptLanguage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListResourceTypesHeaders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commonHeaders'])) {
            $model->commonHeaders = $map['commonHeaders'];
        }
        if (isset($map['x-acs-accept-language'])) {
            $model->xAcsAcceptLanguage = $map['x-acs-accept-language'];
        }

        return $model;
    }
}
