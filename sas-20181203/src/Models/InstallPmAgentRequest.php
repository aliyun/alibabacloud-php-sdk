<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class InstallPmAgentRequest extends Model
{
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
     * @description The source IP address of the request.
     *
     * @example 58.35.xx.xx
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The type of the client.
     *
     *   **aliyun_assist**: Cloud Assistant client
     *   **aliyun_monitor**: CloudMonitor client
     *
     * @example aliyun_assist
     *
     * @var string
     */
    public $type;

    /**
     * @description The UUID of the server. If you specify multiple UUIDs, separate the UUIDs with commas (,).
     *
     * @example inet-a6444920-d303-4ccf-ab87-a1d3cd49****
     *
     * @var string
     */
    public $uuids;
    protected $_name = [
        'lang'     => 'Lang',
        'sourceIp' => 'SourceIp',
        'type'     => 'Type',
        'uuids'    => 'Uuids',
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
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InstallPmAgentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Uuids'])) {
            $model->uuids = $map['Uuids'];
        }

        return $model;
    }
}
