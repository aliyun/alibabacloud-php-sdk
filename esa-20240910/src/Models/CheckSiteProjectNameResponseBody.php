<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class CheckSiteProjectNameResponseBody extends Model
{
    /**
     * @description Indicates whether the task name is valid. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $check;

    /**
     * @description The result description.
     *
     * @example project name pass the check
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the real-time log delivery task.
     *
     * @example dcdn_waf_userAccount_log
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The request ID.
     *
     * @example 34DCBC8A-****-****-****-6DAA11D7DDBD
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'check' => 'Check',
        'description' => 'Description',
        'projectName' => 'ProjectName',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->check) {
            $res['Check'] = $this->check;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckSiteProjectNameResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Check'])) {
            $model->check = $map['Check'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
