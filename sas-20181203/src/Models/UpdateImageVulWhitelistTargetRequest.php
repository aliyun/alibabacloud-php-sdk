<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class UpdateImageVulWhitelistTargetRequest extends Model
{
    /**
     * @example 2000083
     *
     * @var int
     */
    public $id;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @example ignore
     *
     * @var string
     */
    public $reason;

    /**
     * @example image
     *
     * @var string
     */
    public $source;

    /**
     * @example {\"type\":\"repo\",\"target\":[\"sas_test/script_0209\",\"sas_test/script\"]}
     *
     * @var string
     */
    public $target;
    protected $_name = [
        'id'     => 'Id',
        'lang'   => 'Lang',
        'reason' => 'Reason',
        'source' => 'Source',
        'target' => 'Target',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateImageVulWhitelistTargetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }

        return $model;
    }
}
