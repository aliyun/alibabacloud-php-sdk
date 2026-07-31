<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\ListSemanticViewNamesResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $viewName;

    /**
     * @var string
     */
    public $viewSchema;
    protected $_name = [
        'comment' => 'Comment',
        'viewName' => 'ViewName',
        'viewSchema' => 'ViewSchema',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->viewName) {
            $res['ViewName'] = $this->viewName;
        }

        if (null !== $this->viewSchema) {
            $res['ViewSchema'] = $this->viewSchema;
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['ViewName'])) {
            $model->viewName = $map['ViewName'];
        }

        if (isset($map['ViewSchema'])) {
            $model->viewSchema = $map['ViewSchema'];
        }

        return $model;
    }
}
