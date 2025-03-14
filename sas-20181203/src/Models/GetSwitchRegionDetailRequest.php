<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetSwitchRegionDetailRequest extends Model
{
    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The type of the migration operation. Valid values:
     *
     *   **sg_switch**: the migration of a server from a region in the Chinese mainland to the Singapore region.
     *   **sls_meta_version_switch_stage_1**: the upgrade of log dictionaries.
     *
     * @example sg_switch
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'lang' => 'Lang',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSwitchRegionDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
