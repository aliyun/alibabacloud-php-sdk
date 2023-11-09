<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCheckWarningDetailResponseBody\checkDetailColumns;
use AlibabaCloud\Tea\Model;

class DescribeCheckWarningDetailResponseBody extends Model
{
    /**
     * @description The suggestion for the management of the risk item.
     *
     * @example You can fix it in the following ways:↵1. To configure authentication for redis service, click the redis.conf Configure complex password in requirepass, and then restart redis.↵2. In redis configuration file redis.conf The configuration is as follows: bind 127.0.0.1, only allow local access, and then restart redis
     *
     * @var string
     */
    public $advice;

    /**
     * @description List of asset details to check.
     *
     * @var string[][]
     */
    public $checkDetailAssetInfo;

    /**
     * @description Detection content details.
     *
     * @var checkDetailColumns[]
     */
    public $checkDetailColumns;

    /**
     * @description The ID of the check item.
     *
     * @example 946
     *
     * @var int
     */
    public $checkId;

    /**
     * @description The additional information about the risk item.
     *
     * @example The redis port is open to the outside world and there is no authentication option configured. In addition to directly obtaining all the information in the database, unauthorized users can also attack the system through unauthorized access vulnerability.
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the check item.
     *
     * @example Redis unauthorized access
     *
     * @var string
     */
    public $item;

    /**
     * @description The risk level of the check item. Valid values:
     *
     *   **high**: The item is a high-risk item and is highlighted in red.
     *   **medium**: The item is a medium-risk item and is highlighted in orange.
     *   **low**: The item is a low-risk item and is highlighted in gray.
     *
     * @example high
     *
     * @var string
     */
    public $level;

    /**
     * @description The prompt for the risk item.
     *
     * @example weak passwords (username@host/password):root@****\/12***
     *
     * @var string
     */
    public $prompt;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example BE120DAB-F4E7-4C53-ADC3-A97578ABF384
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The type of the check item. Valid values:
     *
     *   **hc_exploit**: unauthorized access
     *   **hc_djbh**: classified protection compliance
     *   **hc_best_secruity**: best security practice
     *   **hc_container**: container security
     *   **hc_custom**: custom baseline
     *   **cis**: Center for Internet Security (CIS) compliance
     *   **weak_password**: weak password
     *
     * @example hc_exploit
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'advice'               => 'Advice',
        'checkDetailAssetInfo' => 'CheckDetailAssetInfo',
        'checkDetailColumns'   => 'CheckDetailColumns',
        'checkId'              => 'CheckId',
        'description'          => 'Description',
        'item'                 => 'Item',
        'level'                => 'Level',
        'prompt'               => 'Prompt',
        'requestId'            => 'RequestId',
        'type'                 => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->advice) {
            $res['Advice'] = $this->advice;
        }
        if (null !== $this->checkDetailAssetInfo) {
            $res['CheckDetailAssetInfo'] = $this->checkDetailAssetInfo;
        }
        if (null !== $this->checkDetailColumns) {
            $res['CheckDetailColumns'] = [];
            if (null !== $this->checkDetailColumns && \is_array($this->checkDetailColumns)) {
                $n = 0;
                foreach ($this->checkDetailColumns as $item) {
                    $res['CheckDetailColumns'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->item) {
            $res['Item'] = $this->item;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCheckWarningDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Advice'])) {
            $model->advice = $map['Advice'];
        }
        if (isset($map['CheckDetailAssetInfo'])) {
            if (!empty($map['CheckDetailAssetInfo'])) {
                $model->checkDetailAssetInfo = $map['CheckDetailAssetInfo'];
            }
        }
        if (isset($map['CheckDetailColumns'])) {
            if (!empty($map['CheckDetailColumns'])) {
                $model->checkDetailColumns = [];
                $n                         = 0;
                foreach ($map['CheckDetailColumns'] as $item) {
                    $model->checkDetailColumns[$n++] = null !== $item ? checkDetailColumns::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Item'])) {
            $model->item = $map['Item'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
