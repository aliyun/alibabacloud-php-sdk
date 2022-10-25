<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\ListMergeRequestCommentsResponseBody;

use AlibabaCloud\SDK\Codeup\V20200414\Models\ListMergeRequestCommentsResponseBody\result\author;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var author
     */
    public $author;

    /**
     * @var int
     */
    public $closed;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $isDraft;

    /**
     * @var int
     */
    public $line;

    /**
     * @var string
     */
    public $note;

    /**
     * @var bool
     */
    public $outDated;

    /**
     * @var int
     */
    public $parentNoteId;

    /**
     * @var string
     */
    public $path;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $rangeContext;

    /**
     * @var string
     */
    public $side;

    /**
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'author'       => 'Author',
        'closed'       => 'Closed',
        'createdAt'    => 'CreatedAt',
        'id'           => 'Id',
        'isDraft'      => 'IsDraft',
        'line'         => 'Line',
        'note'         => 'Note',
        'outDated'     => 'OutDated',
        'parentNoteId' => 'ParentNoteId',
        'path'         => 'Path',
        'projectId'    => 'ProjectId',
        'rangeContext' => 'RangeContext',
        'side'         => 'Side',
        'updatedAt'    => 'UpdatedAt',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->author) {
            $res['Author'] = null !== $this->author ? $this->author->toMap() : null;
        }
        if (null !== $this->closed) {
            $res['Closed'] = $this->closed;
        }
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->isDraft) {
            $res['IsDraft'] = $this->isDraft;
        }
        if (null !== $this->line) {
            $res['Line'] = $this->line;
        }
        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }
        if (null !== $this->outDated) {
            $res['OutDated'] = $this->outDated;
        }
        if (null !== $this->parentNoteId) {
            $res['ParentNoteId'] = $this->parentNoteId;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->rangeContext) {
            $res['RangeContext'] = $this->rangeContext;
        }
        if (null !== $this->side) {
            $res['Side'] = $this->side;
        }
        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Author'])) {
            $model->author = author::fromMap($map['Author']);
        }
        if (isset($map['Closed'])) {
            $model->closed = $map['Closed'];
        }
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IsDraft'])) {
            $model->isDraft = $map['IsDraft'];
        }
        if (isset($map['Line'])) {
            $model->line = $map['Line'];
        }
        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }
        if (isset($map['OutDated'])) {
            $model->outDated = $map['OutDated'];
        }
        if (isset($map['ParentNoteId'])) {
            $model->parentNoteId = $map['ParentNoteId'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['RangeContext'])) {
            $model->rangeContext = $map['RangeContext'];
        }
        if (isset($map['Side'])) {
            $model->side = $map['Side'];
        }
        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }

        return $model;
    }
}
