<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class RenamePlaybookNodeRequest extends Model
{
    /**
     * @description The language of the content within the request and the response. Valid values:
     *
     *   **zh** (default): Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The new name of the node.
     *
     * @example waf_process
     *
     * @var string
     */
    public $newNodeName;

    /**
     * @description The original name of the node.
     *
     * @example firewall_process
     *
     * @var string
     */
    public $oldNodeName;

    /**
     * @description The UUID of the playbook.
     *
     * >  You can call the [DescribePlaybooks](~~DescribePlaybooks~~)operation to query the UUIDs of playbooks.
     * @example ac343acc-1a61-4084-9a1c-xxxxxxxx
     *
     * @var string
     */
    public $playbookUuid;
    protected $_name = [
        'lang'         => 'Lang',
        'newNodeName'  => 'NewNodeName',
        'oldNodeName'  => 'OldNodeName',
        'playbookUuid' => 'PlaybookUuid',
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
        if (null !== $this->newNodeName) {
            $res['NewNodeName'] = $this->newNodeName;
        }
        if (null !== $this->oldNodeName) {
            $res['OldNodeName'] = $this->oldNodeName;
        }
        if (null !== $this->playbookUuid) {
            $res['PlaybookUuid'] = $this->playbookUuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RenamePlaybookNodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['NewNodeName'])) {
            $model->newNodeName = $map['NewNodeName'];
        }
        if (isset($map['OldNodeName'])) {
            $model->oldNodeName = $map['OldNodeName'];
        }
        if (isset($map['PlaybookUuid'])) {
            $model->playbookUuid = $map['PlaybookUuid'];
        }

        return $model;
    }
}
