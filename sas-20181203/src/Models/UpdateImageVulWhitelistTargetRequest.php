<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class UpdateImageVulWhitelistTargetRequest extends Model
{
    /**
     * @description The whitelist ID.
     *
     * @example 2000083
     *
     * @var int
     */
    public $id;

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
     * @description The reason why you add the vulnerability to the whitelist.
     *
     * @example ignore
     *
     * @var string
     */
    public $reason;

    /**
     * @description The source of the whitelist. Valid values:
     *
     *   **image**
     *   **agentless**
     *
     * @example image
     *
     * @var string
     */
    public $source;

    /**
     * @description The vulnerability that you want to add to the whitelist. The value of this parameter is in the JSON format and contains the following fields:
     *
     *   **type**: The type of the vulnerability. The value is fixed to repo.
     *   **target**: The content of the vulnerability. The value is in the format of Namespace/Image repository.
     *
     * @example {\\"type\\":\\"repo\\",\\"target\\":[\\"sas_test/script_0209\\",\\"sas_test/script\\"]}
     *
     * @var string
     */
    public $target;
    protected $_name = [
        'id'     => 'Id',
        'lang'   => 'Lang',
        'reason' => 'Reason',
        'source' => 'Source',
        'target' => 'Target',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateImageVulWhitelistTargetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }

        return $model;
    }
}
