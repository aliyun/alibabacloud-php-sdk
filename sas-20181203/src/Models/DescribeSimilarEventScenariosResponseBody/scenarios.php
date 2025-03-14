<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSimilarEventScenariosResponseBody;

use AlibabaCloud\Tea\Model;

class scenarios extends Model
{
    /**
     * @description The code of the scenario. Valid values:
     *
     *   **default**: the same alert type
     *   **same_file_content**: the same file content rule.
     *   **same_ip**: the same IP address rule.
     *   **same_url**: the same URL rule.
     *
     * @example same_url
     *
     * @var string
     */
    public $code;
    protected $_name = [
        'code' => 'Code',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scenarios
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
