<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportOASResponseBody;

use AlibabaCloud\Tea\Model;

class warningMessages extends Model
{
    /**
     * @var string[]
     */
    public $warningMessage;
    protected $_name = [
        'warningMessage' => 'WarningMessage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->warningMessage) {
            $res['WarningMessage'] = $this->warningMessage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return warningMessages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WarningMessage'])) {
            if (!empty($map['WarningMessage'])) {
                $model->warningMessage = $map['WarningMessage'];
            }
        }

        return $model;
    }
}
