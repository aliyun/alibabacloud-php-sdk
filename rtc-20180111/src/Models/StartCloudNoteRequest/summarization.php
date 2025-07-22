<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudNoteRequest;

use AlibabaCloud\Tea\Model;

class summarization extends Model
{
    /**
     * @var bool
     */
    public $enabled;

    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $type;
    protected $_name = [
        'enabled' => 'Enabled',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return summarization
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['Type'])) {
            if (!empty($map['Type'])) {
                $model->type = $map['Type'];
            }
        }

        return $model;
    }
}
