<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class CreatePlaybookRequest extends Model
{
    /**
     * @description Description of the playbook.
     *
     * @example This is a new version
     *
     * @var string
     */
    public $description;

    /**
     * @description Name of the playbook.
     *
     * This parameter is required.
     *
     * @example test09
     *
     * @var string
     */
    public $displayName;

    /**
     * @description Language type for receiving messages. Values:
     *
     * - **zh** (default): Chinese
     * - **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description Playbook TaskFlow type.
     * - **x6** : x6
     * - **bpmn**: bpmn
     *
     * @example x6
     *
     * @var string
     */
    public $taskflowType;
    protected $_name = [
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'lang' => 'Lang',
        'taskflowType' => 'TaskflowType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->taskflowType) {
            $res['TaskflowType'] = $this->taskflowType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePlaybookRequest
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['TaskflowType'])) {
            $model->taskflowType = $map['TaskflowType'];
        }

        return $model;
    }
}
