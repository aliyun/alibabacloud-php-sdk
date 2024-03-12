<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models\GetAccountFactoryBaselineResponseBody;

use AlibabaCloud\Tea\Model;

class baselineItems extends Model
{
    /**
     * @description The configuration of the baseline item.
     *
     * The value is a JSON string.
     * @example {\"Notifications\":[{\"GroupKey\":\"account_msg\",\"Contacts\":[{\"Name\":\"aa\"}],\"PmsgStatus\":1,\"EmailStatus\":1,\"SmsStatus\":1}]}
     *
     * @var string
     */
    public $config;

    /**
     * @description The name of the baseline item.
     *
     * @example 1097526274671790
     *
     * @var string
     */
    public $name;

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
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
