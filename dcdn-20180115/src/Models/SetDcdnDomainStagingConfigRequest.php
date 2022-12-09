<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class SetDcdnDomainStagingConfigRequest extends Model
{
    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $functions;
    protected $_name = [
        'domainName' => 'DomainName',
        'functions'  => 'Functions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->functions) {
            $res['Functions'] = $this->functions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetDcdnDomainStagingConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Functions'])) {
            $model->functions = $map['Functions'];
        }

        return $model;
    }
}
