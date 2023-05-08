<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeLogMetaRequest extends Model
{
    /**
     * @description The topic of logs that are delivered.
     *
     * @example sas
     *
     * @var string
     */
    public $from;

    /**
     * @description The category of logs. Valid values:
     *
     *   **host**: host logs
     *   **network**: network logs
     *   **security**: security logs
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The ID of the request source. Default value: **aegis**. Valid values:
     *
     *   **aegis**: Server Guard
     *   **sas**: Security Center
     *
     * >  If you use Server Guard, set the value to **aegis**. If you use Security Center, set the value to **sas**.
     * @example 123.168.XX.XX
     *
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'from'     => 'From',
        'lang'     => 'Lang',
        'sourceIp' => 'SourceIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->from) {
            $res['From'] = $this->from;
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
     * @return DescribeLogMetaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['From'])) {
            $model->from = $map['From'];
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
