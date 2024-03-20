<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class SaveBatchTaskForGenerateDomainCertificateShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $domainNamesShrink;

    /**
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @example 127.0.0.1
     *
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'domainNamesShrink' => 'DomainNames',
        'lang'              => 'Lang',
        'userClientIp'      => 'UserClientIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainNamesShrink) {
            $res['DomainNames'] = $this->domainNamesShrink;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveBatchTaskForGenerateDomainCertificateShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainNames'])) {
            $model->domainNamesShrink = $map['DomainNames'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        return $model;
    }
}
