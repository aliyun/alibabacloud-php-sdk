<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class BatchModifyInstanceStatusRequest extends Model
{
    /**
     * @description Specifies whether to start or stop the playbook.
     *
     *   **0**: stops the playbook.
     *   **1**: starts the playbook.
     *
     * @example 1
     *
     * @var int
     */
    public $active;

    /**
     * @description The language of the content within the request and response. Valid values:
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
     * @description The playbook UUID. If you want to specify multiple playbooks, separate the playbook UUIDs with commas (,).
     *
     * >  You can call the [DescribePlaybooks](~~DescribePlaybooks~~)operation to query the playbook UUID.
     * @example 8baa6cff-319e-4ede-97bc-1xxxxxx,s8df2e-s8dfs-xxxx
     *
     * @var string
     */
    public $playbookUuid;
    protected $_name = [
        'active'       => 'Active',
        'lang'         => 'Lang',
        'playbookUuid' => 'PlaybookUuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->active) {
            $res['Active'] = $this->active;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->playbookUuid) {
            $res['PlaybookUuid'] = $this->playbookUuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchModifyInstanceStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Active'])) {
            $model->active = $map['Active'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PlaybookUuid'])) {
            $model->playbookUuid = $map['PlaybookUuid'];
        }

        return $model;
    }
}
