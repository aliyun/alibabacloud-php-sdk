<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\CheckOrganizationDomainResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example bank
     *
     * @var string
     */
    public $domain;

    /**
     * @example OK
     *
     * @var string
     */
    public $prompt;

    /**
     * @example true
     *
     * @var bool
     */
    public $valid;
    protected $_name = [
        'domain' => 'Domain',
        'prompt' => 'Prompt',
        'valid'  => 'Valid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }
        if (null !== $this->valid) {
            $res['Valid'] = $this->valid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }
        if (isset($map['Valid'])) {
            $model->valid = $map['Valid'];
        }

        return $model;
    }
}
