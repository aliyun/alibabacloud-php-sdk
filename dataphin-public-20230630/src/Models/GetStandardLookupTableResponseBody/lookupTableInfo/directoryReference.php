<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetStandardLookupTableResponseBody\lookupTableInfo;

use AlibabaCloud\Dara\Model;

class directoryReference extends Model
{
    /**
     * @var string
     */
    public $directory;
    protected $_name = [
        'directory' => 'Directory',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->directory) {
            $res['Directory'] = $this->directory;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Directory'])) {
            $model->directory = $map['Directory'];
        }

        return $model;
    }
}
