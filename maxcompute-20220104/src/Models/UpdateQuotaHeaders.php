<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Tea\Model;

class UpdateQuotaHeaders extends Model
{
    public $commonHeaders;

    /**
     * @example null
     *
     * @var string
     */
    public $akProven;
    protected $_name = [
        'akProven' => 'AkProven',
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
        if (null !== $this->akProven) {
            $res['AkProven'] = $this->akProven;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateQuotaHeaders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commonHeaders'])) {
            $model->commonHeaders = $map['commonHeaders'];
        }
        if (isset($map['AkProven'])) {
            $model->akProven = $map['AkProven'];
        }

        return $model;
    }
}
