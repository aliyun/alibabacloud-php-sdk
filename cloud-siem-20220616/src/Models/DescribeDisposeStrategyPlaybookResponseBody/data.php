<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeDisposeStrategyPlaybookResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The playbook name, which is the unique identifier of the playbook.
     *
     * @example WafBlockIP
     *
     * @var string
     */
    public $playbookName;

    /**
     * @description The UUID of the playbook.
     *
     * @example system_aliyun_clb_process_book
     *
     * @var string
     */
    public $playbookUuid;
    protected $_name = [
        'playbookName' => 'PlaybookName',
        'playbookUuid' => 'PlaybookUuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->playbookName) {
            $res['PlaybookName'] = $this->playbookName;
        }
        if (null !== $this->playbookUuid) {
            $res['PlaybookUuid'] = $this->playbookUuid;
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
        if (isset($map['PlaybookName'])) {
            $model->playbookName = $map['PlaybookName'];
        }
        if (isset($map['PlaybookUuid'])) {
            $model->playbookUuid = $map['PlaybookUuid'];
        }

        return $model;
    }
}
