<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListStreamJobManagerLogsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $logName;

    /**
     * @var int
     */
    public $mtime;

    /**
     * @var int
     */
    public $size;
    protected $_name = [
        'logName' => 'LogName',
        'mtime' => 'Mtime',
        'size' => 'Size',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logName) {
            $res['LogName'] = $this->logName;
        }

        if (null !== $this->mtime) {
            $res['Mtime'] = $this->mtime;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
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
        if (isset($map['LogName'])) {
            $model->logName = $map['LogName'];
        }

        if (isset($map['Mtime'])) {
            $model->mtime = $map['Mtime'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
