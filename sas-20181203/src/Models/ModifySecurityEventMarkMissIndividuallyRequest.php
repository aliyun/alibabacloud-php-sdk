<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifySecurityEventMarkMissIndividuallyRequest extends Model
{
    /**
     * @description The alert handling rule that you want to delete.
     *
     * @example [{\\"field\\":\\"loginSourceIp\\",\\"operate\\":\\"contains\\",\\"eventType\\":\\"SIL_AI_ALERT\\",\\"eventName\\":\\"login_common_ip\\",\\"fieldValue\\":\\"10.12.XX.XX\\",\\"uuids\\":\\"\\"}]
     *
     * @var string
     */
    public $deleteMarkMissParam;

    /**
     * @description The ID of the request source. Set the value to **sas**.
     *
     * @example sas
     *
     * @var string
     */
    public $from;

    /**
     * @description The alert handling that you want to add.
     *
     * @example [{\\"field\\":\\"location\\",\\"operate\\":\\"contains\\",\\"eventType\\":\\"SIL_AI_ALERT\\",\\"eventName\\":\\"login_common_ip\\",\\"fieldValue\\":\\"xx\\",\\"uuids\\":\\"4296ee47-bf19-4fa4-a4a6-6bxxxxxxxxx\\"}]
     *
     * @var string
     */
    public $insertMarkMissParam;

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
     * @description The source IP address of the request. You do not need to specify this parameter. It is automatically obtained by the system.
     *
     * @example 127.0.XX.XX
     *
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'deleteMarkMissParam' => 'DeleteMarkMissParam',
        'from'                => 'From',
        'insertMarkMissParam' => 'InsertMarkMissParam',
        'lang'                => 'Lang',
        'sourceIp'            => 'SourceIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deleteMarkMissParam) {
            $res['DeleteMarkMissParam'] = $this->deleteMarkMissParam;
        }
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->insertMarkMissParam) {
            $res['InsertMarkMissParam'] = $this->insertMarkMissParam;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifySecurityEventMarkMissIndividuallyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeleteMarkMissParam'])) {
            $model->deleteMarkMissParam = $map['DeleteMarkMissParam'];
        }
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['InsertMarkMissParam'])) {
            $model->insertMarkMissParam = $map['InsertMarkMissParam'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
