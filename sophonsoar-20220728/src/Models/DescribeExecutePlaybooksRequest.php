<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class DescribeExecutePlaybooksRequest extends Model
{
    /**
     * @description The language of the content within the request and the response. Valid values:
     *
     *   **zh**: Chinese (default)
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The input parameter type of the playbook.
     *
     *   **template-ip**
     *   **template-file**
     *   **template-process**
     *   **custom**
     *
     * @example custom
     *
     * @var string
     */
    public $paramType;

    /**
     * @description The playbook name. Fuzzy search is supported.
     *
     * @example demo_test
     *
     * @var string
     */
    public $playbookName;

    /**
     * @description The playbook UUID.
     *
     * >  You can call the [DescribePlaybooks](~~DescribePlaybooks~~) operation to query the playbook UUID.
     * @example f916b93e-e814-459f-9662-xxxxxx
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'lang'         => 'Lang',
        'paramType'    => 'ParamType',
        'playbookName' => 'PlaybookName',
        'uuid'         => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->paramType) {
            $res['ParamType'] = $this->paramType;
        }
        if (null !== $this->playbookName) {
            $res['PlaybookName'] = $this->playbookName;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeExecutePlaybooksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['ParamType'])) {
            $model->paramType = $map['ParamType'];
        }
        if (isset($map['PlaybookName'])) {
            $model->playbookName = $map['PlaybookName'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
