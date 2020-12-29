<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\CheckFabricConsortiumDomainResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $domain;

    /**
     * @var bool
     */
    public $valid;

    /**
     * @var string
     */
    public $prompt;
    protected $_name = [
        'domain' => 'Domain',
        'valid'  => 'Valid',
        'prompt' => 'Prompt',
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
        if (null !== $this->valid) {
            $res['Valid'] = $this->valid;
        }
        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
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
        if (isset($map['Valid'])) {
            $model->valid = $map['Valid'];
        }
        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }

        return $model;
    }
}
