<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\JwtIdentityConfig;

use AlibabaCloud\Dara\Model;

class claimsToHeadersConfigs extends Model
{
    /**
     * @var string
     */
    public $claim;

    /**
     * @var string
     */
    public $header;

    /**
     * @var bool
     */
    public $override;
    protected $_name = [
        'claim' => 'claim',
        'header' => 'header',
        'override' => 'override',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->claim) {
            $res['claim'] = $this->claim;
        }

        if (null !== $this->header) {
            $res['header'] = $this->header;
        }

        if (null !== $this->override) {
            $res['override'] = $this->override;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['claim'])) {
            $model->claim = $map['claim'];
        }

        if (isset($map['header'])) {
            $model->header = $map['header'];
        }

        if (isset($map['override'])) {
            $model->override = $map['override'];
        }

        return $model;
    }
}
