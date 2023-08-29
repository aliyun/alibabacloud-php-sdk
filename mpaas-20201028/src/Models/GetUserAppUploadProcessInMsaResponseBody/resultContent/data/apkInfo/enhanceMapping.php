<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\GetUserAppUploadProcessInMsaResponseBody\resultContent\data\apkInfo;

use AlibabaCloud\Tea\Model;

class enhanceMapping extends Model
{
    /**
     * @var string
     */
    public $info;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'info'   => 'Info',
        'reason' => 'Reason',
        'type'   => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->info) {
            $res['Info'] = $this->info;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return enhanceMapping
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Info'])) {
            $model->info = $map['Info'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
