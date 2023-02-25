<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class SetRoutineSubdomainShrinkRequest extends Model
{
    /**
     * @description The parameters of the subdomain.
     *
     * ```
     * @example ["subdomain-test"]
     *
     * @var string
     */
    public $subdomainsShrink;
    protected $_name = [
        'subdomainsShrink' => 'Subdomains',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subdomainsShrink) {
            $res['Subdomains'] = $this->subdomainsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetRoutineSubdomainShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Subdomains'])) {
            $model->subdomainsShrink = $map['Subdomains'];
        }

        return $model;
    }
}
