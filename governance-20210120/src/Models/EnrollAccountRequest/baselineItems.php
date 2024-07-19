<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models\EnrollAccountRequest;

use AlibabaCloud\Tea\Model;

class baselineItems extends Model
{
    /**
     * @description The configurations of the baseline item.
     *
     * @example {\\"Notifications\\":[{\\"GroupKey\\":\\"account_msg\\",\\"Contacts\\":[{\\"Name\\":\\"aa\\"}],\\"PmsgStatus\\":1,\\"EmailStatus\\":1,\\"SmsStatus\\":1}]}
     *
     * @var string
     */
    public $config;

    /**
     * @description The name of the baseline item.
     *
     * @example ACS-BP_ACCOUNT_FACTORY_VPC
     *
     * @var string
     */
    public $name;

    /**
     * @description Specifies whether to skip the baseline item. Valid values:
     *
     *   false: The baseline item is not skipped.
     *   true: The baseline item is skipped.
     *
     * @example false
     *
     * @var bool
     */
    public $skip;

    /**
     * @description The version of the baseline item.
     *
     * @example 1.0
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'config'  => 'Config',
        'name'    => 'Name',
        'skip'    => 'Skip',
        'version' => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->skip) {
            $res['Skip'] = $this->skip;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return baselineItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Skip'])) {
            $model->skip = $map['Skip'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
