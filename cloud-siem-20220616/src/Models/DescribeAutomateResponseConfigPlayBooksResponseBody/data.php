<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAutomateResponseConfigPlayBooksResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The description of the playbook.
     *
     * @example Waf Block IP
     *
     * @var string
     */
    public $description;

    /**
     * @description The display name of the playbook.
     *
     * @example WafBlockIP
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The unique identifier name of the playbook.
     *
     * @example WafBlockIP
     *
     * @var string
     */
    public $name;

    /**
     * @description The input parameter template of the playbook. Valid values:
     *
     *   template-ip: IP address
     *   template-process: process
     *   template-filee: file
     *
     * @example template-ip
     *
     * @var string
     */
    public $paramType;

    /**
     * @description The UUID of the playbook.
     *
     * @example system_aliyun_clb_process_book
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'name'        => 'Name',
        'paramType'   => 'ParamType',
        'uuid'        => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->paramType) {
            $res['ParamType'] = $this->paramType;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ParamType'])) {
            $model->paramType = $map['ParamType'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
