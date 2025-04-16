<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateAdHocFileRequest;

use AlibabaCloud\Dara\Model;

class createCommand extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $directory;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $projectId;
    protected $_name = [
        'content' => 'Content',
        'directory' => 'Directory',
        'name' => 'Name',
        'projectId' => 'ProjectId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->directory) {
            $res['Directory'] = $this->directory;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['Directory'])) {
            $model->directory = $map['Directory'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
