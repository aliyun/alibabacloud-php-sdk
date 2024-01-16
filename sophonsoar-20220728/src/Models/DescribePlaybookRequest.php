<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class DescribePlaybookRequest extends Model
{
    /**
     * @description The flag that indicates whether the playbook is of the debugging or published version. Valid values:
     *
     *   **1**: playbook of the debugging version
     *   **0**: playbook of the published version
     *
     * @example 0
     *
     * @var int
     */
    public $debugFlag;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The UUID of the playbook.
     *
     * >  You can call the [DescribePlaybooks](~~DescribePlaybooks~~)operation to query the UUIDs of playbooks.
     * @example 9030076b-6733-4842-b05a-xxxxx
     *
     * @var string
     */
    public $playbookUuid;

    /**
     * @description The MD5 hash value of the playbook.
     *
     * @example 7a8f608dc64c242632aa578xxxxx
     *
     * @var string
     */
    public $taskflowMd5;
    protected $_name = [
        'debugFlag'    => 'DebugFlag',
        'lang'         => 'Lang',
        'playbookUuid' => 'PlaybookUuid',
        'taskflowMd5'  => 'TaskflowMd5',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->debugFlag) {
            $res['DebugFlag'] = $this->debugFlag;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->playbookUuid) {
            $res['PlaybookUuid'] = $this->playbookUuid;
        }
        if (null !== $this->taskflowMd5) {
            $res['TaskflowMd5'] = $this->taskflowMd5;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePlaybookRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DebugFlag'])) {
            $model->debugFlag = $map['DebugFlag'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PlaybookUuid'])) {
            $model->playbookUuid = $map['PlaybookUuid'];
        }
        if (isset($map['TaskflowMd5'])) {
            $model->taskflowMd5 = $map['TaskflowMd5'];
        }

        return $model;
    }
}
