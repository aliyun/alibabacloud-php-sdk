<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class QueryPublicModelEngineRequest extends Model
{
    /**
     * @description The ID of the DataWorks workspace. You can log on to the [DataWorks console](https://account.alibabacloud.com/login/login.htm) and go to the Workspace Management page to view the workspace ID.
     *
     * @example 1234
     *
     * @var string
     */
    public $projectId;

    /**
     * @description The FML statement that is used to query information about the data modeling engine. For more information, see [Use FML statements to configure and manage data tables](~~298128#task-2091320~~ "After a data table is created, you can execute fast modeling language (FML) statements in the code editor of the table to configure fields and partitions for the table. This topic describes how to use FML statements to configure a data table.").
     *
     * Only SHOW statements are supported.
     * @example show dim tables
     *
     * @var string
     */
    public $text;
    protected $_name = [
        'projectId' => 'ProjectId',
        'text'      => 'Text',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryPublicModelEngineRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        return $model;
    }
}
